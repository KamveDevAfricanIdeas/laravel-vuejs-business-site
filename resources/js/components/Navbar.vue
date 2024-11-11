<template>
    <div class="navbar-style">
        <a href="tools" class="navbar-link-style">Tools</a>
        <a href="admin" class="navbar-link-style">Admin Center</a>
        <a href="register-new" class="navbar-link-style">Register User</a>
    </div>
</template>
<script>
    export default{
        name: "Navbar",
        mounted(){
            console.log("Navbar added.");
        }
    }
</script>