<template>
  <div class="home">
    <div class="card">
      <h2>タイトル</h2>
      <p>
        説明が入ります。説明が入ります。説明が入ります。説明が入ります。説明が入ります。説明が入ります。説明が入ります。説明が入ります。説明が入ります。説明が入ります。
      </p>
      <button @click="$router.push({ name: 'Detail', params: { id: 1 } })">
        もっとみる
      </button>
      <button @click="$router.push({ name: 'Edit', params: { id: 1 } })">
        編集する
      </button>
    </div>
  </div>
</template>

<style scoped>
.card {
  border: 1px solid #555;
  padding: 10px;
  margin: 10px auto;
}
</style>