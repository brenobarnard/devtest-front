<div class="question collapsed">
    <div class="title">
        <span class="text">{{ $question->titulo }}</span>
        <span class="bar"></span>
        <img src="{{URL::asset('/icon/seta.png')}}" alt="" class="icon">
    </div>
    <div class="answer">
        <p>{{ $question->descricao }}</p>
    </div>
</div>