require('./bootstrap');

// Runs when page are loaded and DOM nodes are ready.
window.onload = function() {
    // Select all questions
    var questions = getQuestions();

    // Runs through questions and add listeners to its titles.
    questions.forEach(function (el, key, parent) {
        closeQuestion(el);
        // Get the title from the actual question
        var title = el.querySelector('.title');

        // Adds the listeners
        title.removeEventListener('click', toggleQuestion);
        title.addEventListener('click', toggleQuestion);
    });
};

// Toggle a question state from opened and closed.
function toggleQuestion(ev) {
    // Pick question element from event.
    var question = ev.srcElement.parentElement;

    // Toggle question state.
    if (question.classList.contains('collapsed')) {
        // Question Closed
        // Set second parameter to true to run accordion effect.
        openQuestion(question);
    } else {
        // Question Opened
        closeQuestion(question);
    }
}

// Close a question.
function closeQuestion(question) {
    question.classList.add('collapsed');

    var answer = question.querySelector('.answer');
    answer.style.maxHeight = 0;
}

// Open a question, also close all other questions.
function openQuestion(question, accordion = true) {
    var questions = getQuestions();

    // Close all other questions.
    if (accordion) {
        questions.forEach(function (listEl, listKey) {
            if (question !== listEl) {
                closeQuestion(listEl);
            }
        });
    }

    question.classList.remove('collapsed');

    // Animate answer.
    var answer = question.querySelector('.answer');
    answer.style.maxHeight = answer.scrollHeight + "px";
}


// Select all question elements and return's it.
function getQuestions() {
    return document.querySelectorAll('.question');
}