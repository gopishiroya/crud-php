<?php
  if(isset($_POST['submit'])) {
    $name=$_POST['name'];
    $email=$_POST['email'];
    $number=$_POST['number'];
    $message="welcome";
    $header ="From: rekhabenshiroya@gmail.com";

    if(mail($name, $email, $number, $message, $header)) {
      echo "send mail";
    } else {
      echo "error";
    }
  }

  // $to="gopishiroya63@gmail.com";
  // $subject="hello from php";
  // $message="welcome";
  // $headers="From: gopishiroya63@gmail.com";

  // if(mail($to, $subject, $message, $headers)) {
  //   echo "send mail";
  // } else {
  //   echo "error";
  // }
?>

<html>
    <head>
        <title>from</title>
        <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
      integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
      crossorigin="anonymous"
    />
    </head>
    <body>
    <form class="col-sm-6 offset-3" method="post">
      <div class="form-group">
        <label for="exampleInputEmail1">Name</label>
        <input
          type="text"
          name="name"
          class="form-control"
          id="exampleInputName"
          placeholder="Enter Name"
        />
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1">Email</label>
        <input
          type="email"
          name="email"
          class="form-control"
          id="exampleInputEmail1"
          placeholder="Enter email"
        />
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Phone number </label>
        <input
          type="text"
          name="number"
          class="form-control"
          id="exampleInputPhonenumber"
          placeholder="Enter phone number"
        />
      </div>
      <button type="submit" name="submit" class="btn btn-primary">Submit</button>
    </form>

    <script
      src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
      integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js"
      integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"
      integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
      crossorigin="anonymous"
    ></script>
    </body>
</html>


<!-- https://youtu.be/9zfZhsV4NF0 -->