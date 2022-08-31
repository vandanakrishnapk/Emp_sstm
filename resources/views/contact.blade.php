@extends('frontend.home')
@section('title2',"contact_page")
@section('contactcss')
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
}

* {
  box-sizing: border-box;
}

/* Style inputs */
input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}
input[type=number], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}
input[type=submit] {
  background-color: #04AA6D;
  color: white;
  padding: 12px 20px;
  border: none;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

/* Style the container/contact section */
.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 10px;
}

/* Create two columns that float next to eachother */
.column {
  float: left;
  width: 50%;
  margin-top: 6px;
  padding: 20px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .column, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}
</style>
@endsection
@section('contact')
<div class="container">
  <div style="text-align:center">
    <h2>Contact Us</h2>
  </div>
  <div class="row">
    <div class="column">
      <img src="https://toptiersolutioncom.files.wordpress.com/2021/03/contact-us.png" style="width:100%">
    </div>
    <div class="column">
      <form action="{{route('savecontact')}}" method="POST">
        @csrf
        <label for="fname">Name</label>
        <input type="text" id="fname" name="name" placeholder="Your name.."><br>
        <label for="lname">Phonenumber</label>
        <input type="number" id="lname" name="ph" placeholder="Your last name.."><br>
        <label for="country">District</label>
        <select id="country" name="dis">
          <option value="Kozhikode">Kozhikode</option>
          <option value="Wayanad">Wayanad</option>
          <option value="Kannur">Kannur</option>
        </select><br>
        <label for="subject">Subject</label>
        <textarea id="subject" name="su" placeholder="Write something.." style="height:170px"></textarea><br>
        <input type="submit" value="Submit">
      </form>
    </div>
  </div>
</div>

@endsection