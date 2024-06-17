
<template>
        <Navbar />

    <br><br>
    <div class="flex flex-row gap-4">
        <div class="basis-1/2">
            <div class="max-w-md mx-auto bg-white rounded-xl shadow-md overflow-hidden md:max-w-2xl">
                <div class="md:flex">
                    <div class="shrink-0">
                        <img class="h-48 w-full object-cover md:h-full md:w-48" src="/images/car-roubo.jpg" alt="https://pixabay.com/pt/photos/carro-roubo-ladrao-assaltante-1590508/">
                    </div>
                    <div class="p-8">
                        <div class="uppercase tracking-wide text-sm text-indigo-500 font-semibold">Dicas de Segurança</div>
                        <a href="/dicas/VeiculoRoubado" class="block mt-1 text-lg leading-tight font-medium text-black hover:underline">Seu Veiculo Foi Roubado?</a>
                        <p class="mt-2 text-slate-500">Siga estes passos essenciais caso seu veículo seja roubado. Saiba exatamente o que fazer para lidar com essa situação e aumentar as chances de recuperação do seu carro.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="basis-1/2">
            <div class="max-w-md mx-auto bg-white rounded-xl shadow-md overflow-hidden md:max-w-2xl">
                <div class="md:flex">
                    <div class="shrink-0">
                        <img class="h-48 w-full object-cover md:h-full md:w-48" src="/images/volante.png" alt="Dormir no Volante">
                    </div>
                    <div class="p-8">
                        <div class="uppercase tracking-wide text-sm text-indigo-500 font-semibold">Dicas de Segurança</div>
                        <a href="#" class="block mt-1 text-lg leading-tight font-medium text-black hover:underline">Sonolência ao Volante?</a>
                        <p class="mt-2 text-slate-500">Descubra estratégias cruciais para se manter alerta ao volante e evitar a sonolência enquanto dirige. Aprenda técnicas eficazes, garantindo uma viagem segura para todos na estrada.</p>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
    <br>

</template>
  
<script>
import Navbar from '../Components/Navbar.vue';

export default {
  name: 'VeiculoRoubado',
  components: {
    Navbar,
  }
};
</script>


