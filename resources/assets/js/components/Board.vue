<template>

<div>

  <section v-if="!boardCleared" class="min-h-screen bg-pattern bg-center">

    <div v-for="chunk in board" class="px-6 pb-8 pt-8 w-full max-w-lg mx-auto">

      <div class="flex mb-4">
        <card v-for="(card,index) in chunk" :key="index" :data="card"></card>
      </div>

    </div>
  </section>

  <div v-if="boardCleared" class="flex flex-col">
    <div class="min-h-screen bg-pattern bg-center bg-smoke-light flex items-center justify-center leading-tight p-6 pb-16">
      <div>
        <div>
          <h1 class="text-center font-semibold text-3xl tracking-tight mb-1">Winner Winner Laravel Dinner!!!</h1>
        </div>

        <h2 class="mt-12 font-light text-3xl sm:text-4xl text-center mb-4">
          You Matched All The Faces
        </h2>

        <div class="mt-12 sm:flex sm:justify-center">
          <button v-on:click="reset" class="no-underline mt-8 sm:mt-0 mx-auto sm:mx-2 max-w-xs rounded-full text-center leading-none font-semibold block px-8 py-3 border-2 border-brand-dark bg-brand-dark text-white" >
            Play Again
          </button>
        </div>
      </div>
    </div>

  </div>

</div>

</template>

<script>
    export default {

        name: 'board',

        props: ['board'],

        data() {
            return {
                selectedCard : null,
                matchedPairs: 0,
                boardCleared: false
            }
        },

        mounted() {

            var self = this;

            window.Bus.$on('card.selected', function(card){

                if( self.selectedCard !== null ) {
                    if( self.selectedCard.id === card.id ) {
                        window.Bus.$emit('lock.cards', card);

                        self.selectedCard = null;

                        self.matchedPairs = self.matchedPairs + 1;

                        if( self.matchedPairs === 12 ) {
                            self.boardCleared = true;
                        }

                    }else{
                        self.selectedCard = null;

                        window.Bus.$emit('reset.cards');
                    }
                }else{
                    self.selectedCard = card;
                }

            });

        },

        methods: {
            reset() {
                window.location.reload();
            }
        }
    }
</script>
