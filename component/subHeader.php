
    <section id="subHeader" class="mobSubHeader deskSubHeader">
        <div class="h-96 w-full text-center lg:grid lg:grid-cols-2 ">
            <img class="object-cover hidden overflow-hidden sm:hidden md:h-96 lg:inline-block lg:h-full lg:w-full" src="https://images.unsplash.com/photo-1454923634634-bd1614719a7b?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80" alt="People about walking">
            <div class="content flex justify-center h-96 sm:48 text-white text-center p-4 flex items-center lg:text-left">
                <div class="text p-4">
                    <p class="text-2xl font-bold pb-2">Qui irure qui lorem cupidatat commodo.</p>
                    <p class="text-sm">Anim aute id magna aliqua ad ad non deserunt sunt. Qui irure qui lorem cupidatat commodo.</p>
                    <div class="rounded-md mt-4 cursor-pointer">
                        <a onclick="scroll2Anchor()" class="btn flex w-1/2 items-center justify-center rounded-md border border-transparent bg-transparent px-8 py-3 text-base font-medium text-white hover:bg-transparent hover:text-white lg:ml-0 m-auto md:py-4 md:px-10 md:text-lg"><span>Get started</span></a>
                    </div>
                </div>
            </div>
          </div>
    </section>


<script>

    function scroll2Anchor() {
        document.getElementById('about').scrollIntoView({
        behavior: 'smooth' 
        });
    }

</script>

<style>
    .content {
        background: #478174;
    }
    #subHeader .btn {
        background: transparent;
        border: 2px solid #ffffff;
        color: #ffffff;
    }
</style>