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
        url: 'quiz.php',
        method: 'POST',
        data: data,
        dataType: 'json',
        success: function(data) {
            console.log("success");
            console.log(data.page);
            window.location.replace(data.page);
    }, error: function(date){
        alert('fail');
    }
    });
}

function getTemplate() {
    var template = '<div id="{questionId}">';

    template += '<h3 class="ml-32">';

    template += questions[currentQuestion].title;

    template += '</h3>';

    questions[currentQuestion].answers.forEach(element => {
        template += '<div class="form-check">';
        template += '<label class="form-check-label">';
        template += '<input type="radio" class="form-check-input" name="' + 'Q' + currentQuestion + 'answer' + '" value="' + element.value +'">';
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
        'title' : 'What do you want to do?',
        'answers' : [
            {
                'text' : 'Front-end',
                'value' : 'A'
            },
            {
                'text' : 'Back-end',
                'value' : 'B'
            },
            {
                'text' : 'Mobile',
                'value' : 'C'
            },
            {
                'text' : 'Software',
                'value' : 'D'
            }
        ]
    },
    {
        'key' : 'question-2',
        'title' : 'What do you want to do - 2?',
        'answers' : [
            {
                'text' : 'Front-end - 2',
                'value' : 'A'
            },
            {
                'text' : 'Back-end  - 2',
                'value' : 'B'
            },
            {
                'text' : 'Mobile  - 2',
                'value' : 'C'
            },
            {
                'text' : 'Software  - 2',
                'value' : 'D'
            }
        ]
    },
    {
        'key' : 'question-3',
        'title' : 'What do you want to do - 3?',
        'answers' : [
            {
                'text' : 'Front-end - 3',
                'value' : 'A'
            },
            {
                'text' : 'Back-end - 3',
                'value' : 'B'
            },
            {
                'text' : 'Mobile - 3',
                'value' : 'C'
            },
            {
                'text' : 'Software - 3',
                'value' : 'D'
            }
        ]
    },
    {
        'key' : 'question-4',
        'title' : 'What do you want to do - 4?',
        'answers' : [
            {
                'text' : 'Front-end - 3',
                'value' : 'A'
            },
            {
                'text' : 'Back-end - 3',
                'value' : 'B'
            },
            {
                'text' : 'Mobile - 3',
                'value' : 'C'
            },
            {
                'text' : 'Software - 3',
                'value' : 'D'
            }
        ]
    },
    {
        'key' : 'question-5',
        'title' : 'What do you want to do - 5?',
        'answers' : [
            {
                'text' : 'Front-end - 3',
                'value' : 'A'
            },
            {
                'text' : 'Back-end - 3',
                'value' : 'B'
            },
            {
                'text' : 'Mobile - 3',
                'value' : 'C'
            },
            {
                'text' : 'Software - 3',
                'value' : 'D'
            }
        ]
    }
]



