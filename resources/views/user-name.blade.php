@if($name)
    Name: {{$name}}
@else
    Name not found
@endif
<ul>
    @foreach($fakeData as $item)
        <li>
            Lesson: {{$item['lesson']}};
            Level: {{$item['level']}}
        </li>
    @endforeach
</ul>
