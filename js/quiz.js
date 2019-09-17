var answers = {};
var currentQuestion = -1;
var my_array = [];
var json;

var render = function (template, node) {
	node.innerHTML = template;
};

function alertFunction() {
    alert($("input[name=Q1answer]:checked").val());
}

function nextQuestion() {
    // Start of the quiz, first question
    //alert('currentQ:' + this.currentQuestion + ' ' + 'Length:' + this.questions.length);
    if (currentQuestion == -1) {
        currentQuestion++;
        document.getElementById('question-btn').innerHTML = 'Next question';
        getTemplate();
        setQuestion();
        return;
    }
    currentAnswerQuerySelector = 'input[name="Q' + currentQuestion + 'answer"]:checked';
    // End of the quiz, no more questions
    // +1 cause arrays start at 0 :(
    if (currentQuestion+1 == questions.length) {
        // get all answers, post them to somewhere
        // calculate what is the type
        // redirect
        var key = questions[currentQuestion].key;
        answers[key] = document.querySelector(currentAnswerQuerySelector).value;
        my_array.push(answers[key]);
        document.getElementById('question-wrap').innerHTML = 'completed';
        document.getElementById('question-btn').classList.add('d-none');
        postValue();
        return;
    }
    // Last question, set btn text
    if (currentQuestion+2 == questions.length) {
        document.getElementById('question-btn').innerHTML = 'Finish quiz';
    }


    currentAnswerQuerySelector = 'input[name="Q' + currentQuestion + 'answer"]:checked';

    var key = questions[currentQuestion].key;
    answers[key] = document.querySelector(currentAnswerQuerySelector).value;
    
    my_array.push(answers[key]);

    currentQuestion++;
    getTemplate();
    setQuestion();

 }

 function postValue() {
    var data = "data=" + JSON.stringify(my_array);  
    $.ajax({
        url: 'quizAjax.php',
        method: 'POST',
        data: data,
        dataType: 'json',
        success: function(data) {
            console.log("success");
            console.log(data.page);
            window.location.replace(data.page);
    }, error: function(data){
        alert('fail');
    }
    });
}

function getTemplate() {
    var template = '<div id="{questionId}" class="quiz-wrapper mx-64">';

    template += '<h5 class="ml-32 mb-32">';

    template += questions[currentQuestion].title;

    template += '</h5>';

    questions[currentQuestion].answers.forEach((element, index) => {
        template += '<div class="input-group">';
        template += '<input type="radio" class="form-check-input"' + 'id="' + index + 'answer' + '" name="' + 'Q' + currentQuestion + 'answer' + '" value="' + element.value +'">';
        template += '<label class="form-check-label"' + 'for="'+ index + 'answer' + '">';
        template += element.text;
        template += '</label>';
        template += '</div>';
    });

    template += '</div>';

    return template;
}
function setQuestion() {
    var node = document.getElementById('question-wrap');
    render(getTemplate(), node);
}

// implement get from rpc/ajax/api whatever
var questions = [
    {
        'key' : 'question-1',
        'title' : 'When you first thought of picking up programming as a hobby or a potential new career choice. What was it that made you interested in the field ?',
        'answers' : [
            {
                'text' : 'A possibility of building nice and neat looking web-pages.',
                'value' : 'A'
            },
            {
                'text' : 'I was curious on what happens "behind the scenes" in the pages that i visit or applications that I use.',
                'value' : 'B'
            },
            {
                'text' : 'Curiosity about how applications work on my mobile phone or tablet.',
                'value' : 'C'
            },
            {
                'text' : 'I was always interested on how different types of software that I use daily is built and how it functions',
                'value' : 'D'
            }
        ]
    },
    {
        'key' : 'question-2',
        'title' : 'Out of these four options, which one corresponds to what you want to learn?',
        'answers' : [
            {
                'text' : 'I always wanted to learn how to build good looking web-pages',
                'value' : 'A'
            },
            {
                'text' : 'I want to know how to manipulate different types of data and display it in pages or applications',
                'value' : 'B'
            },
            {
                'text' : 'I want to learn how to make mobile applications to help other people that are always on the go',
                'value' : 'C'
            },
            {
                'text' : 'I\'m interested how different software applications work and what kind of work goes in to making them',
                'value' : 'D'
            }
        ]
    },
    {
        'key' : 'question-3',
        'title' : 'Based on the descriptions that you read in the introduction page, which development field seems more attracting to you ?',
        'answers' : [
            {
                'text' : 'Front-end web development',
                'value' : 'A'
            },
            {
                'text' : 'Back-end development',
                'value' : 'B'
            },
            {
                'text' : 'Mobile development',
                'value' : 'C'
            },
            {
                'text' : 'Software development',
                'value' : 'D'
            }
        ]
    },
    {
        'key' : 'question-4',
        'title' : 'Developers normally see things that arent working the way that they would like them to, in which of the following categories have you encountered something that you would like to improve ?',
        'answers' : [
            {
                'text' : 'A website that you visit daily doesn\'t look visually pleasing and you would like to improve it.',
                'value' : 'A'
            },
            {
                'text' : 'A website, software or maybe a service that you use daily is processing required data too slow or incorrectly.',
                'value' : 'B'
            },
            {
                'text' : 'A particular mobile application that you like to use isn\'t working as expected and you experience frequent crashes or bugs',
                'value' : 'C'
            },
            {
                'text' : 'A software that you use daily at work, home or even a video game that you play is slow and/or buggy',
                'value' : 'D'
            }
        ]
    },
    {
        'key' : 'question-5',
        'title' : 'Everyone learns in a different way, which of the following answers reflect more to your preferences ?',
        'answers' : [
            {
                'text' : 'I like to see a visual representation of the progress I\'m making each time I make some changes',
                'value' : 'A'
            },
            {
                'text' : 'I like solving difficult problems and see what kind of different changes I can make',
                'value' : 'B'
            },
            {
                'text' : 'I like to see how well the progress that has been made transfers over to different devices.',
                'value' : 'C'
            },
            {
                'text' : 'I like solving large variety of different problems and see whether the solutions make positive impact on whatever I am working on.',
                'value' : 'D'
            }
        ]
    }
]



