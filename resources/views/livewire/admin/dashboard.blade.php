<div>
   <h1> {{ auth()->user()->email }}</h1>
   <h1> {{ auth()->user()->id }}</h1>
   <h1> {{ auth()->user()->user_type }}</h1>
   <h1> {{ auth()->user()->admin->nome }}</h1>

   <h4>{{ App\Models\Admin::find(1)->user}}<h4>


   {{ auth()->user() }}


</div>
