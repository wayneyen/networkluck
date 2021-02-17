<template>
  <div>
    <div class="grid grid-cols-1 lg:grid-cols-1">
      <table class="border-collapse border border-blue-600 table-auto mt-5">
        <thead>
          <tr class="bg-blue-600 text-white">
            <th class="p-2 border border-blue-500"></th>
            <th class="p-2 border border-blue-500">功能</th>
            <th class="p-2 border border-blue-500">優惠價</th>
          </tr>
        </thead>

        <tbody>
          <tr v-for="(item, index) in items" :key="index">
            <td class="p-2 border border-blue-500 text-center"><input type="checkbox" name="" id=""></td>
            <td class="p-2 border border-blue-500">{{ item.name }}</td>
            <td class="p-2 border border-blue-500 text-right">{{ item.price }}</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</template>

<script>
module.exports = {
  data () {
    return {
      items: [
        { name: '最新消息', price: 5000 },
        { name: '文章系統', price: 5000 },
        { name: '服務項目', price: 5000 },
        { name: '商品展示', price: 5000 },
        { name: '購物車', price: 5000 },
        { name: '聯絡表單', price: 5000 },
      ]
    }
  }
}
</script>

<style scoped>

</style>
