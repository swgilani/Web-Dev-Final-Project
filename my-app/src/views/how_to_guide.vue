<template>
  <div class="howto text-md-center" style="font-family: 'Coda', cursive;">

   


         <h1 style="font-size:80px; color: orange">FRONT-END</h1>
      <h1 style="color:orange">How to Create a Great Looking Website page</h1><br>
      <p class="blocktext">Vuetify offers a lot of components for us to use to customize our website. Some of these include the v-toolbar component, which we have used to create the toolbar on the top of our website. <br><br>
        The following code below is our component for our toolbar.
        We used the v-toolbar component to include a toolbar, and then used various other components as well to customize the toolbar to our liking.
        </p>
         <img src="/goodpage1.jpg" alt="" style="width:1000px;height:600px;">
        <br>
        <br>
        <br>
     

         <p class="blocktext">In terms of the photo on top, it is the same process as including a picture in HTML and CSS.<br>
        We incorporated it by using a simple img tag.
        </p>
         <img src="/goodpage2.jpg" alt="" style="width:450px;height:30px;">

         <br>
         <br>
         <br>

         <p class="blocktext"> 
            For the header of the nutrition chart, we used the v-toolbar-title component to make it resemble a header.
            To make the nutrition chart card, we used the v-card component, and customized it to our liking to make it look as good as possible.
            The following code shows us how we used the v-toolbar-title component and v-card component and customized the nutrition chart.
         </p>
         <br>
         <img src="/goodpage3.jpg" alt="" style="width:900px;height:500px;">
            <br><br><br><hr><hr><br>

         <h1 style="font-size:80px; color: orange">BACK-END</h1>

         <p class="blocktext" style="display:inline;">Our backend part of this website is our</p> <p style="color:orange; display:inline; font-size:25px"> Contact Us</p>
         <p class="blocktext" style="display:inline"> function.
          <p class="blocktext">To try out this function, you can click the button on the top right of the page, or click the button below.</p>
           <v-btn flat dark large href="https://contactsyed530.herokuapp.com/" style="color:orange;" outline >Contact us</v-btn>
        <br><br><br>

        <h1 style="font-size:40px; color: orange">HOW DOES IT WORK?</h1>

        <p class="blocktext text">For back-end, we had to create a different application, so it is completely separate from our main website's code.
          
          We used a different page for our Contact Us page, because the process was easier than merging our Vue, Vuetify and Laraval code.
        </p>
        <p class="blocktext text">For the formatting of the form, and the page itself, we did it with simple HTML, CSS and Bootstrap.
        We also added simple if-statements in our form, so if nothing is inputted, it gives us an error. The code for this is shown below
          </p>
          <img src="/backcode.jpg" alt="" style="width:900px;height:600px;">
         
         <br><br>
         <br>

         <p class="blocktext text">
           To initialize our page, we first added routes to the main page, and added controllers to that page.
           The controller will contains a method for each of the available operations on the website. <br><br>
           Our controllers has two parts. One of the is "store", and the other one is "create".
           The "create" route directs the user to the main page "Contact Us" page.
           The "store" route is used when the user submits the form, and a confirmation pops up on the screen.<br>




         </p>
         <br>
         <br>
         <img src="/backend1.jpg" alt="" style="width:900px;height:600px;">

        <br>
        <br>
        <br>


        <p class="blocktext text">
        Now, the code below is our entire "ContactMessageController.php" file. 
        First, this validates if all the fields have been filled in by the user. If they are not, it sends an error. <br><br>
        The second part of the code is where it actually sends the information entered by the user to the desired output. <br>
        </p>
        <br>
        <br>
       
        <img src="/backend2.jpg" alt="" style="width:900px;height:600px;">

        <br>
        <br>

        <p class="blocktext text">
        The output is selected in the ".env" file, where we can set it up so it sends the email to a Google Account.
         The code below is our settings in our ".env" file.
          </p>

          <img src="/envfile.jpg" alt="" >







            <br><br><br><hr>
            <br>
            <br>
              
              <br>
             <h1 style="font-size:40px; color: orange">DEMONSTRATION</h1>
             <br>
         <p class="blocktext">The following gif is a demonstration, and proof that our back-end works successfully.</p>
         <br><br>





          <img src="/working.gif" alt="" style="width:1200px;height:600px;">

              <br>
              <br>
              <br>
              <br>

  
  </div>
</template>


<style>
p {

font-size: 20px;


}


hr { background-color: white; height: 1px; border: 0; }


.EXTENDER {
    position: absolute;
    top: 0px;
    left: 0px;
    bottom: 0px;
    right: 0px;
    width: 100%;
    height: 100%;
    overflow-y: hidden;
    overflow-x: hidden;
}

.PADDER-CENTER {
    width: 100%;
    height: 100%;
    display: -webkit-box;
    display: -moz-box;
    display: -ms-flexbox;
    display: -webkit-flex;
    display: flex;
    -webkit-box-pack: center;
    -moz-box-pack: center;
    -ms-flex-pack: center;
    -webkit-justify-content: center;
    justify-content: center;
    -webkit-box-align: center;
    -moz-box-align: center;
    -ms-flex-align: center;
    -webkit-align-items: center;
    align-items: center;
}

p.blocktext {
    margin-left: auto;
    margin-right: auto;
    width: 40em;
    font-size: 25px;
}




</style>
