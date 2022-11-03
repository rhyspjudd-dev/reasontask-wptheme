<div class="topnav">
    <div class="search">
      <div class="relative w-full">
        <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
            <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path></svg>
        </div>
        <input type="text" id="simple-search" class="text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search" required>
    </div>
    </div>
    <div class="lightdark font-bold">
      <div class="light border-b-4 border-indigo-500 flex justify-center items-center">Learn</div>
      <div class="dark text-white h-full flex justify-center items-center">Donate</div>
    </div>
  </div>
  <nav class="relative">
    <a href="#" class="logo">
      <img alt="Vue logo" class="ml-4" src="<?php echo get_template_directory_uri(); ?>/assets/logo/logo.png" />
    </a>
    <div class="links">
    <?php wp_nav_menu( array( 'theme_location' => 'main-menu' ) );?>
    </div>
  </nav>
    
</section>

<script>

    (function() { 'use strict';

    document.addEventListener( 'DOMContentLoaded', onReady );
    function onReady() {
    initApp();
    }

    function initApp() {
    new Vue({
        el: 'nav',
        data: {
    
        },
        methods: {
        // addToCart( item ) {
        //     this.total += item.price
        // },
            alert() {
                alert("hello");
            },
        },
    });
    }

    })();

</script>