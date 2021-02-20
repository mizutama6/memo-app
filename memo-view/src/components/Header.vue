<template>
  <div class="header">
    <h1>Memo App</h1>
    
    <div class="">
      <button @click="$router.push({name: 'Home'})">Home</button>
      <button @click="$router.push({name: 'Create'})">Create a memo</button>
    </div>
  </div>
</template>