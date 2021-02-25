<template>
  <div>
    <div class="grid grid-cols-1 lg:grid-cols-2 lg:gap-4">
      <table class="border-collapse border border-blue-600 table-auto mt-5">
        <thead>
          <tr class="bg-blue-600 text-white">
            <th class="p-2 border border-blue-500"></th>
            <th class="p-2 border border-blue-500">功能</th>
            <th class="p-2 border border-blue-500">優惠價</th>
          </tr>
        </thead>

        <tbody>
          <tr v-for="(item, index) in items" :key="index" class="hover:bg-gray-200 hover:text-black">
            <td class="p-2 border border-blue-500 text-center">
              <input type="checkbox" class="rounded" :id="'id-' + index" name="selectedItems[]" :value="index" v-model="selectedIndexes">
            </td>
            <td class="p-2 border border-blue-500">
              <label :for="'id-' + index" class="block cursor-pointer">{{ item.name }}</label>
            </td>
            <td class="p-2 border border-blue-500 text-right">
              <label :for="'id-' + index" class="block cursor-pointer">{{ vueNumberFormat(item.price, numberOptions) }}</label>
            </td>
          </tr>
        </tbody>
      </table>

      <fieldset class="mt-5">
        <legend class="bg-gray-500 text-white w-full text-center py-4">
          估算結果 ( {{ selectedItems.length }} 個項目 )
        </legend>
        <div class="grid grid-cols-3">
          <template v-for="(item, index) in selectedItems" :key="index">
            <div class="col-span-2 text-right py-1 first:pt-2">{{ item.name }}</div>
            <div class="text-right pt-1">{{ vueNumberFormat(item.price, numberOptions) }}</div>
          </template>
        </div>
        <hr class="py-1">
        <div class="grid grid-cols-3">
          <div class="col-span-2 text-right">小計</div>
          <div class="text-right">{{ vueNumberFormat(selectedTotal, numberOptions) }}</div>
        </div>
      </fieldset>
    </div>
  </div>
</template>

<script>
module.exports = {
  data () {
    return {
      numberOptions: {
        prefix: '$',
        thousand: ',',
        precision: 0,
      },
      items: [
        { name: '一頁式版型', price: 8000 },
        { name: '全站版型', price: 20000 },
        { name: '最新消息', price: 3000 },
        { name: '文章系統', price: 3000 },
        { name: '服務項目', price: 3000 },
        { name: '商品展示', price: 5000 },
        { name: '購物車', price: 8000 },
        { name: '聯絡表單', price: 1500 },
        { name: '小程序設計', price: 30000 },
      ],
      selectedIndexes: []
    }
  },
  computed: {
    selectedItems() {
      const selectedIndexes = this.selectedIndexes ?? []
      const selectedItems = this.items.filter(function(item, index, array) {
        return selectedIndexes.includes(index)
      })

      return selectedItems
    },

    selectedTotal() {
      const total = this.selectedItems.reduce((totals, current) => {
        return { price: totals.price + current.price }
      }, { price: 0 })

      return total.price
    }
  }
}
</script>

<style scoped>

</style>
