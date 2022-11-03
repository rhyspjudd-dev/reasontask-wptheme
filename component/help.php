
<section id="help" >
    <div class="bg-slate-300 h-96 flex justify-center items-center">
    <div class="container p-4 relative">
        <h3 class="text-2xl font-bold mb-4 lg:text-left">How can we help you?</h3>
        <p class="lg:text-left">Anim aute id magna aliqua ad ad non deserunt sunt. Qui irure qui lorem cupidatat commodo</p>
        <form action="" class="bg-white p-8 mt-8 grid grid-cols-5 px-8 lg:px-96">
            <h3 class="inline flex justify-center items-center">I am a</h3>
            <select v-model="selectedA" id="underline_select" class=" flex justify-center text-cyan-500 font-bold items-center inline py-2.5 px-0 w-full text-sm text-gray-500 bg-transparent border-0 appearance-none dark:text-gray-400 dark:border-gray-700 focus:outline-none focus:ring-0 focus:border-gray-200 ">
            <option class="text-cyan-500" value="" disabled selected hidden>individual &darr;</option>    
            <option value="individual">individual</option>
            <option value="goat">goat</option>
            </select>
            <h3 class="inline flex justify-center items-center">i want</h3>
            <select v-model="selectedB" id="underline_select" class=" flex justify-center text-cyan-500 font-bold items-centerinline py-2.5 px-0 w-full text-sm text-gray-500 bg-transparent border-0 appearance-none dark:text-gray-400 dark:border-gray-700 focus:outline-none focus:ring-0 focus:border-gray-200 peer">
            <option class="text-cyan-500" value="" disabled selected hidden>to learn &darr;</option>    
            <option selected value="to learn">to learn</option>
                <option value="to graze">to graze</option>
            </select>
            <button @click="getSelected()" class="btn"><span>Submit</span></button>
        </form>
    </div>
    </div>
</section>


<script>

const help = {
    help: {
            id: "help",
            title: "How can we help you?",
            text: "Anim aute id magna aliqua ad ad non deserunt sunt. Qui irure qui lorem cupidatat commodo",
            optA: {
                a: "individual",
                b: "goat" 
            },
            optB: {
                a: "to learn",
                b: "to graze"
            }
        },
}

let selectedA = ' '
let selectedB = ' '


</script>

<style>

#help .btn {
    min-width: 108px
}

option:selected {
    color: cyan !important;
}

.modal {
    height: 100vh;
    width: 100vw;
}

.fadeInModal {
    animation: fadeIn 5s;
}

.fadeOutModal {
    animation: fadeOut 5s;
}

@keyframes fadeIn {
  0% { opacity: 0; }
  100% { opacity: 1; }
}
@keyframes fadeOut {
    0% { opacity: 1;}
    99% { opacity: 0.01;width: 100%; height: 100%;}
    100% { opacity: 0;width: 0; height: 0;}
}

</style>