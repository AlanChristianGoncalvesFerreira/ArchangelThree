<div id="cHome">
 <figure>
   
 </figure> 
 <article>
     <h2>Sobre mim </h2>
     <p>Alan Christian Gonçalves Ferreira , designer gráfico e desenvolvedor 
front end , desde 2010 .</br>
 Já são 11 anos de carreira , trabalhando para 
pequenas , médias e grandes empresas .</p>

<button type="button"><a href="https://www.linkedin.com/in/alanchristiangoncalvesferreira/" target="_blank">Currículo</a></button>
 </article>


</div>    

<style>
#cHome{
    padding: 20px;
}
#cHome figure{
    width: 44%;
    height: 112%;
   float:left;
 background-image: url("images/logoone.png");
 background-size:100%;
 background-repeat:no-repeat;
 animation-name: slide;
  animation-duration: 30s;
  animation-iteration-count: infinite;
}

@keyframes slide {
  0%   { background-image: url("images/logoone.png");
 background-size:100%;
 background-repeat:no-repeat;}
  25%  { background-image: url("images/camiseta-slide.png");
 background-size:100%;
 background-repeat:no-repeat;}
  45%  { background-image: url("images/onofre-slide.png");
 background-size:100%;
 background-repeat:no-repeat;}
  65% { background-image: url("images/bobburnquist-slide.png");
 background-size:100%;
 background-repeat:no-repeat;}
 85% { background-image: url("images/pikachu-slide.png");
 background-size:100%;
 background-repeat:no-repeat;}
 100% { background-image: url("images/monster-slide.png");
 background-size:100%;
 background-repeat:no-repeat;}
}
#cHome figure img{     
    width: 50%;
    height: 114%;
        

}
#cHome article{   
    width: 46%;
    color: black;
    font-size: 1.2em;
    float:right;
    margin-top: 20%;
}

#cHome article button{
    width: 50%;
    height: 49px;
    background-color: #f14f11;
    border-radius: 19px;
    border: 2px solid black;
    font-size: 1.2em;
    margin: 10px 0 0 150px;


}
@media only screen and (max-width: 824px) { 
    #cHome figure {
    width: 70%;
    height: 49%;
    float: none;
}

#cHome article {
  float:none;
  width:100%;

}

}
</style>