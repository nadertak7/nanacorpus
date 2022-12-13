<!DOCTYPE html>

<html lang="en">

  <head>

    <title>nanacorpus</title>

    <link rel="stylesheet" href="app.css">
    <script src="public/app.js"></script> 

  </head>

  <body>
    
    <div id="app" v-cloak> 

      <div class="mainscreen">

          <video autoplay loop muted plays-inline class=background-video> 
            <source src="{{ URL('videos/NATURE.mp4') }}" type = "video/mp4">
          </video> 


          <nav> 
            <a href="/"><img src="{{ URL('images/home3.jpg') }}" alt="logo" class="logo"></a>
            <ul>
                <li> <a href='#'> Tools </a> </li> 
                <li> <a href='#'> Citation </a> </li> 
                <li> <a href='#'> Account </a> </li> 
                <li> <a href='https://github.com/nadertak7' target="_blank"> GitHub </a> </li> 
            </ul> 
          </nav> 
          
          <div v-show="isVisible" class="content">  
            
            <h1>nanacorpus</h1>
            <h2>web corpus toolkit<h2> 
            <br> 
            <button v-on:click="toggle">Click here to get started</button>
            
          </div>  
           
          <div v-show="!isVisible" class="content1"> 

            <h1> Please upload your .txt file </h1>
            <button class="button2">Upload File</button> 
            <button class="button2">Submit</button>
            <button class="button3" v-on:click="toggle">Back</button>  
          
          </div>
        
      </div> 
    
    <script src="https://unpkg.com/vue@next"></script>
    
  <script> 
    let app = Vue.createApp({
      data: function() {
        return {
          isVisible: true 
        }
      },
      methods: {
        toggle() {
          this.isVisible = !this.isVisible
        }
      }
    })
    app.mount('#app')
  </script>

 
  
  </div> 
    
  </body>

 



</html>