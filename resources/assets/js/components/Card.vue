<template>

  <div :class="{ 'bg-white': !selected, 'bg-grey-lightest' : (selected && !locked), 'bg-grey-light' : locked }" class="w-1/6 shadow m-2 p-8 h-full rounded flex items-center justify-center" v-on:click="toggleState">

    <div v-if="selected" class="cursor-pointer w-32 h-24 mx-auto flex flex-col items-center justify-center">
      <img class="rounded-full " :src="data.img" />
      <span class="text-orange-laravel mt-4">{{ data.name }}</span>
    </div>

    <div class="cursor-pointer text-7xl text-orange-laravel" v-else>
      <svg class="svg-inline--fa fa-laravel fa-w-20" aria-hidden="true" data-prefix="fab" data-icon="laravel" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" data-fa-i2svg=""><path fill="currentColor" d="M637.5 241.6c-4.2-4.8-62.8-78.1-73.1-90.5-10.3-12.4-15.4-10.2-21.7-9.3-6.4.9-80.5 13.4-89.1 14.8-8.6 1.5-14 4.9-8.7 12.3 4.7 6.6 53.4 75.7 64.2 90.9l-193.7 46.4L161.2 48.7c-6.1-9.1-7.4-12.3-21.4-11.6-14 .6-120.9 9.5-128.5 10.2-7.6.6-16 4-8.4 22s129 279.6 132.4 287.2c3.4 7.6 12.2 20 32.8 15 21.1-5.1 94.3-24.2 134.3-34.7 21.1 38.3 64.2 115.9 72.2 127 10.6 14.9 18 12.4 34.3 7.4 12.8-3.9 199.6-71.1 208-74.5 8.4-3.5 13.6-5.9 7.9-14.4-4.2-6.2-53.5-72.2-79.3-106.8 17.7-4.7 80.6-21.4 87.3-23.3 7.9-2 9-5.8 4.7-10.6zm-352.2 72c-2.3.5-110.8 26.5-116.6 27.8-5.8 1.3-5.8.7-6.5-1.3-.7-2-129-266.7-130.8-270-1.8-3.3-1.7-5.9 0-5.9s102.5-9 106-9.2c3.6-.2 3.2.6 4.5 2.8 0 0 142.2 245.4 144.6 249.7 2.6 4.3 1.1 5.6-1.2 6.1zm306 57.4c1.7 2.7 3.5 4.5-2 6.4-5.4 2-183.7 62.1-187.1 63.6-3.5 1.5-6.2 2-10.6-4.5s-62.4-106.8-62.4-106.8L518 280.6c4.7-1.5 6.2-2.5 9.2 2.2 2.9 4.8 62.4 85.5 64.1 88.2zm12.1-134.1c-4.2.9-73.6 18.1-73.6 18.1l-56.7-77.8c-1.6-2.3-2.9-4.5 1.1-5s68.4-12.2 71.3-12.8c2.9-.7 5.4-1.5 9 3.4 3.6 4.9 52.6 67 54.5 69.4 1.8 2.3-1.4 3.7-5.6 4.7z"></path></svg>
    </div>
  </div>

</template>

<script>
  export default {
      name: 'card',
      props: ['data'],
      data() {
          return {
              locked: false,
              selected: false
          }
      },
      created() {

          var self = this;

          window.Bus.$on('lock.cards', function(card){
              if( self.data.id === card.id ) {
                  self.locked = true;
              }
          });

          window.Bus.$on('reset.cards', function(){

              if(!self.locked) {
                  self.selected = false;
              }

          });

      },
      methods: {
          toggleState() {

              if( this.locked ) {
                  return;
              }

              this.selected = !this.selected;

              if( this.selected ) {
                  window.Bus.$emit('card.selected', this.data);
              }
          }
      }
  }
</script>
