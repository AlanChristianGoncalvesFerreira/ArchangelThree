

<div id="cServicos">


</div>
<div id="cForm">
<form action="index.php" method="post" onsubmit="return valida_form(this)">
<fieldset>
    <legend>Contato</legend>
<label for="nome"> Nome :</label></br>
<input type="text" id="nome" name="nome" value="digite aqui"></br>
<label for="email"> Email : </label></br>
<input type="email" name="email" id="email" ></br>
<textarea name="message" rows="10" cols="30" id="message">

</textarea></br>
<input type="submit" value="Submit" class="button">

</fieldset>
</form>

</div>

<style>
fieldset{width: 47%;
        height: 75%;
        margin: 0 auto;
    color:black;  }
form input{ width:50%;
            min-width: 198px;
            height:40px;
            margin:10px;}
form textarea{width:70%;
            min-width:198px;
             height: 63%;
            margin:10px;  }            

.button { width:30%;    
          height:40px;
         color:black;
         background-color: #f14f11;
    font-size: 1.2em;
    border-radius: 10px;  }
  
    @media only screen and (max-width: 824px) {



     }   


</style>