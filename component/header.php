
  <section id="header"> 
    <div class="container">
        <div class="overlay"></div>
        <img class="h-96 w-full object-cover" src="https://images.unsplash.com/photo-1571844307880-751c6d86f3f3?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1000&q=80" alt="hero banner">
        <div class="title p-4">                
          <h1 class="text-4xl font-bold tracking-tight text-gray-900 sm:text-5xl md:text-6xl md:mb-4 lg:mb-4">
              <span class="block xl:inline bg-cyan-500/50 font-bold py-2.5 text-white md:px-4 md:mb-4 lg:mb-8">Get online 2022</span>
          </h1>
          <p class="mt-3 text-base text-cyan-500 sm:mx-auto sm:mt-5 sm:max-w-xl sm:text-lg md:mt-5 md:text-cyan-500 md:text-xl md:text-cyan-500 md:bg-white lg:mx-0 lg:mb-5 md:p-4 md:mb-4 lg:mt-12">Anim aute id magna aliqua ad ad non deserunt sunt. Qui irure qui lorem cupidatat commodo. Elit sunt amet fugiat veniam occaecat fugiat aliqua.</p>
          <div class="rounded-md cursor-pointer">
            <a onclick='scroll2Anchor()' class="btn flex w-1/2 m-auto mt-2 rounded-md items-center justify-center rounded-md border border-transparent bg-white-500/50 px-8 py-3 text-base font-medium md:py-4 md:px-10 md:text-lg lg:mt-8"><span>Get Started</span></a>
          </div>
        </div>
      </div>
  </section>

<script>

    function() scroll2Anchor {
        event.preventDefault();
        document.getElementById('about').scrollIntoView({
        behavior: 'smooth' 
        });
    }

</script>

<style>

#header .container {
  display: flex;
  justify-content: center;
  align-items: center;
  position: relative;
}
#header .container .overlay { 
  background: linear-gradient(0deg, rgba(255, 255, 255, 0.7), rgba(255, 255, 255, 0.7) 40%, transparent);
  height: 100%;
  width: 100%;
  position: absolute;
}

#header .container .title {
  position: absolute;
}

@media only screen and (min-width: 560px) {

    #header .container {
      max-width: 100vw;
    }
    #header .container .overlay {
      display: none;
    }
    #header .container img {
      height: 34em;
    }
    #header .container a {
      margin: 0;
    }
    #header .container .title {
      position: absolute;
      left: 4%;
      text-align: left;
    }

}

</style>