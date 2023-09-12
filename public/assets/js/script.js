let actualities = document.getElementsByClassName('actualities');
let limit = 3;

    for (var i = 0; i < actualities.length; i++) {
        actualities[i].addEventListener('change', function() {
            var checkedCount = document.querySelectorAll('.actualities:checked').length;

            if (checkedCount > limit) {
                this.checked = false;
            }
        });
    }
