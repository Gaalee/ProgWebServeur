@extends('layouts/main')

@section('content')
<div class="row">
 <div class="col-sm-8 offset-sm-2">
    <h1>Contact</h1>
    @if(session()->get('success'))
    <div class="callout success">
      {{ session()->get('success') }}  
    </div>
    @endif
  <div>
    @if ($errors->any())
      <div class="callout alert">
        
            @foreach ($errors->all() as $error)
            <i class="fas fa-exclamation-triangle red" style="color:red;"></i>{{ $error }}<br>
            @endforeach
      
      </div><br />
    @endif
      <form method="post" action="{{ action('ContactController@store') }}">
      @csrf
              <label for="contact_name">Name :</label>
              <input type="text" name="contact_name"/>

              <label for="contact_email">Email :</label>
              <input type="text" name="contact_email"/>

              <label for="contact_message">Message :</label>
              <textarea rows="4" name="contact_message"></textarea>

          <button type="submit" class="button">Send</button>
      </form>
  </div>
</div>
</div>
<br>
<div class="row">
<table class="contact_table">
  <thead>
    <tr>
      <th>Name</th>
      <th>Email</th>
      <th>Message</th>
      <th>Date</th>
    </tr>
  </thead>
  <tbody>
  @foreach ( $contacts as $contact )
    <tr>
      <td><?php echo $contact->contact_name; ?></td>
      <td><?php echo $contact->contact_email; ?></td>
      <td><?php echo $contact->contact_message; ?></td>
      <td><?php echo $contact->contact_date; ?></td>
    </tr>
  @endforeach
  </tbody>
</table>
</div>
@endsection
