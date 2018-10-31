<!DOCTYPE html>
<html>

<title> Shueworld Elections 2018 </title>
<style>
body {
    font-family: 'Changa', sans-serif;
}

footer{
    padding: 20px;
    background-color: #333;
    text-align: center;
    color: white;
}

header{
    background-color: orange;
    padding: 10px;
    text-align: center;
    font-size: 20px;
    color: white;
    font-family: 'Changa', sans-serif;
}

input[type=submit] {
    width: 300px;
    background-color: orange;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    /*width: 400px;*/
}

input[type=submit]:hover {
    background-color: #45a049;
}

input[type=text] {
    /*background-color: #45a049;*/
    width: 150px;
    height: 30px;
}

div {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 30px;
   /* width: 400px;
    height: 100px;*/
    align-content: center;
    height: 200px;

}

#canidate1{
  width: 150px;
  height: 30px;

}
/*#canidate2{
  width: 150px;
  height: 30px;

}

#canidate3{
  width: 150px;
  height: 30px;

}*/


</style>


<header>
	<h2 align="cetner"> Shueworld Elections 2018 </h2>
</header>

<body>
	<!-- <h1 align="center"> Shueworld Elections</h1> -->
	<h3 align="center"> Sneaker Of The House</h3>

<p>Choose your first choice for Sneaker of the House, and click the "Submit" button.</p>

<p>

</p>

<div align="center">

  @if(isset($validVoterID))

    @if($validVoterID == true && $voteRecorded == true)
      <p style="color: green;">
        Your vote has been recorded.
      </p>
    @else
      <p style="color: red;">
        Invalid voter ID.
      </p>
    @endif
  @endif


  <form action="{{ route('vote') }}" method="POST">
    <label for="vid">Voter ID </label>
    <input type="text" id="vid" name="voterid" placeholder="Your Voter ID..">

    <p>

    </p>

    <label for="Canidate">First Canidate Choice </label>
    <select id="canidate1" name="canidate1">
      <option value="Nike">Senator Adidas </option>
      <option value="Adidas">Senator Converse </option>
      <option value="Converse">Senator Nike </option>
      <!-- <option value="Reebok">Senator Reebok</option> -->
    </select>

     <!--    <p> </p>

     <label for="Canidate">Canidate Choice 2</label>
    <select id="canidate2" name="canidate2">
      <option value="Nike">Senator Adidas </option>
      <option value="Adidas">Senator Converse</option>
      <option value="Converse">Senator Nike </option>
      <select>

        <p> </p>

     <label for="Canidate">Canidate Choice 3</label>
    <select id="canidate3" name="canidate3">
      <option value="Nike">Senator Adidas</option>
      <option value="Adidas">Senator Converse</option>
      <option value="Converse">Senator Nike</option>
      <select> -->

       <p> </p>

       {{ csrf_field() }}

     <input type="submit" value="Submit">



    </form>
</div>

<br>

 <footer>
            <p> Meghana Bhatia - Theodoros Konstantopoulos - Alejandro Soler Gayoso <p>
                <p> CS 4404 - Mission I </p>
    </footer>

</body>
</html>
