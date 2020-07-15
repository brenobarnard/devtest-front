require('./bootstrap');

window.onload = function() {
    var questions = document.querySelectorAll('.question');

    questions.forEach(function (el, key, parent) {
        var title = el.querySelector('.title');
        
        function toggleQuestion(ev) {
            questions.forEach(function (listEl, listKey) {
                if (key != listKey) {
                    listEl.classList.add('collapsed');
                }
            });

            el.classList.toggle('collapsed');
        }

        title.removeEventListener('click', toggleQuestion);
        title.addEventListener('click', toggleQuestion);
    });
};

