<template>
  <div class="home">
    <v-card elevation="1" tile>
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
    </v-card>
  </div>
</template>

<style scoped>
.card {
  border: 1px solid #555;
  padding: 10px;
  margin: 10px auto;
}
</style>