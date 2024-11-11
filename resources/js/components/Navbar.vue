<template>
    <nav class="navbar-style">
        <div class="container mx-auto flex justify-between items-center">
            <img src="https://static.vecteezy.com/system/resources/previews/011/031/598/original/stock-exchange-and-trading-icon-design-element-png.png"
                class="w-10 h-10">
            <div>
                <a href="tools" class="navbar-link-style">Tools</a>
                <a href="admin" class="navbar-link-style">Admin Center</a>
                <a href="register-co" class="navbar-link-style">Register Company</a>
            </div>
            <button type="button" class="p-2 rounded-xl text-black text-xs bg-amber-500">New Component</button>
        </div>
    </nav>
</template>
<script>
    export default{
        name: "Navbar",
        mounted(){
            console.log("Navbar added.");
        }
    }
</script>