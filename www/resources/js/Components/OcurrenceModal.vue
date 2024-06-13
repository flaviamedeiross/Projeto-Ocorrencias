<template>
    <div class="fixed inset-0 bg-gray-600 bg-opacity-50 flex items-center justify-center">
      <div class="bg-white p-8 rounded-lg shadow-lg w-1/3">
        <h2 class="text-2xl mb-4">Cadastro de Ocorrência</h2>
        <form @submit="submitForm">
          <div class="mb-4">
            <label for="rela" class="block text-sm font-medium text-gray-700">Relato</label>
            <input type="text" v-model="formData.rela" id="rela" class="mt-1 p-2 border border-gray-300 rounded-md w-full" required>
          </div>
          <div class="mb-4">
            <label for="endere" class="block text-sm font-medium text-gray-700">Endereço</label>
            <input type="text" v-model="formData.endere" id="endere" class="mt-1 p-2 border border-gray-300 rounded-md w-full" required>
          </div>
          <div class="mb-4">
            <label for="dat" class="block text-sm font-medium text-gray-700">Data</label>
            <input type="date" v-model="formData.dat" id="dat" class="mt-1 p-2 border border-gray-300 rounded-md w-full" required>
          </div>
          <div class="mb-4">
            <label for="horari" class="block text-sm font-medium text-gray-700">Horário</label>
            <input type="time" v-model="formData.horari" id="horari" class="mt-1 p-2 border border-gray-300 rounded-md w-full" required>
          </div>
          <div class="flex justify-end">
            <button type="button" @click="$emit('close-modal')" class="mr-2 py-2 px-4 bg-gray-500 text-white rounded-md">Cancelar</button>
            <button type="submit" class="py-2 px-4 bg-blue-500 text-white rounded-md">Salvar</button>
          </div>
        </form>
      </div>
    </div>
  </template>
  
  <script>
  export default {
    props: {
      occurrenceId: {
        type: Number,
        required: true,
      },
    },
    data() {
      return {
        formData: {
          rela: '',
          endere: '',
          dat: '',
          horari: '',
        },
      };
    },
    methods: {
      submitForm() {
        const data = {
          ...this.formData,
          identi: this.occurrenceId,
        };
        this.$emit('save-occurrence', data);
      },
    },
  };
  </script>
  
  <style scoped>
  </style>
  