function Validator(formSelector) {
    var _this = this;
    var formRules = {};
    // Function get Parent Element 
    function getParent(element, selector) {
        while (element.parentElement) {
            if (element.parentElement.matches(selector)) {
                return element.parentElement;
            }
            element = element.parentElement;
        }
    }

    /*
    Quy uoc tao rule
    Neu co loi thi return `error message`
    Neu khong co loi thi return underfine
    */
    var validatorRules = {
        required: function (value) {
            return value ? undefined : "Vui lòng nhập trường này"
        },
        email: function (value) {
            var regexEmail = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
            return regexEmail.test(value) ? undefined : "Trường này phải là Email";
        },
        min: function (min) {
            return function (value) {
                return value.length >= min ? undefined : `Vui lòng nhập ít nhất ${min} ký tự`;
            }
        },
        max: function (max) {
            return function (value) {
                return value.length <= max ? undefined : `Vui lòng nhập tối đa ${max} ký tự`;
            }
        }
    }

    // take form Element in DOM by formSelector 
    var formElement = document.querySelector(formSelector);

    // just process when have form element in DOM
    if (formElement) {
        var inputs = formElement.querySelectorAll('[name][rules]');

        // function validate
        handleValidate = function (event) {
            var rules = formRules[event.target.name];
            var errorMessage;

            for (const rule of rules) {
                errorMessage = rule(event.target.value);
                if (errorMessage) break;
            }

            // if have error, display eror
            if (errorMessage) {
                var formGroup = getParent(event.target, '.form-group');
                if (formGroup) {
                    formGroup.classList.add('invalid');
                    var formMessage = formGroup.querySelector('.form-message');
                    if (formMessage) {
                        formMessage.innerText = errorMessage;
                    }
                }
            }

            return !errorMessage;
        }

        // function clear error message
        handleClear = function (event) {
            var formGroup = getParent(event.target, '.form-group');
            if (formGroup.classList.contains('invalid')) {
                formGroup.classList.remove('invalid');
                var formMessage = formGroup.querySelector('.form-message');
                if (formMessage) {
                    formMessage.innerText = '';
                }
            }
        }



        for (const input of inputs) {
            var rules = input.getAttribute('rules').split(' ').join('');
            console.log(rules);
            rules = rules.split('|');
            for (var rule of rules) {
                var ruleHasValue = rule.includes(':');
                var ruleInfo;

                if (ruleHasValue) {
                    ruleInfo = rule.split(":");
                    rule = ruleInfo[0];
                }

                var ruleFunc = validatorRules[rule];

                if (ruleHasValue) {
                    ruleFunc = ruleFunc(ruleInfo[1]);
                }

                if (Array.isArray(formRules[input.name])) {
                    formRules[input.name].push(ruleFunc);
                } else {
                    formRules[input.name] = [ruleFunc];
                }
            }

            // listen event and process
            input.onblur = handleValidate;
            input.oninput = handleClear;
        }
    }
    formElement.onsubmit = function (event) {
        event.preventDefault();

        var inputs = formElement.querySelectorAll('[name][rules]');
        var isValid = true;
        for (const input of inputs) {
            if (!handleValidate({ target: input })) {
                isValid = false;
            }
        };

        // when have no error, submit form to database
        if (isValid) {
            if (typeof _this.onSubmit === 'function') {
                var enableInputs = formElement.querySelectorAll('[name]');
                var formValues = Array.from(enableInputs).reduce(function (values, input) {
                    switch (input.type) {
                        case "checkbox":
                            if (!input.matches(':checked')) return values;
                            if (!Array.isArray(values[input.name])) {
                                values[input.name] = [];
                            }

                            values[input.name].push(input.value);
                            break;
                        case "radio":
                            values[input.name] = formElement.querySelector('input[name="' + input.name + '"]' + ':checked').value;
                            break;
                        case "file":
                            values[input.name] = input.files;
                            break;
                        default:
                            values[input.name] = input.value;
                            break;
                    }

                    return values;
                }, {});
                _this.onSubmit(formValues);
            } else {
                formElement.submit();
            }
        }
    }
}