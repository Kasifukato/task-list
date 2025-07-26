<h1>
  List of tasks
</h1>


<div> 


  @forelse ($tasks as $task )

  <div>{{ $task->title }}</div>


  @empty

    <div>there are no tasks.</div>
  
  @endforelse




 

</div>