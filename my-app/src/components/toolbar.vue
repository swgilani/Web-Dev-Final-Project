<template>
<nav>
<v-toolbar  flat app dark>
      <v-toolbar-side-icon style="color:orange" @click="drawer = !drawer"></v-toolbar-side-icon>
      <v-toolbar-title class="headline text-uppercase">
        <span>CPS</span>
        <span class="font-weight-light">530</span>
        <span class="font-weight-light" style="color:orange;"> Final Project</span>
      </v-toolbar-title>
      <v-spacer></v-spacer>
      <v-btn href="https://contactsyed530.herokuapp.com/" outline color="orange">Contact us</v-btn>
      

        
    </v-toolbar>

<v-navigation-drawer v-model="drawer" v-bind:width="200" style="font-family: 'Coda', cursive;" app dark>
   
      <v-list>
        <v-list-tile v-for="link in links" :key="link.text" router :to="link.route">
          <v-list-tile-action>
            <v-icon class="orange--text" style="font-size: 20px;">{{ link.icon }}</v-icon>
          </v-list-tile-action>
          <v-list-tile-content>
            <v-list-tile-title  :ripple="{ class: 'error--text' }" style="font-size: 15px;" class="white--text">{{ link.text }}
            </v-list-tile-title>
          </v-list-tile-content>
        </v-list-tile>
      </v-list>
     
    </v-navigation-drawer>
     

  </nav>
</template>

<script>
  export default {
  data() {
    return {
      drawer: false,
      links: [
        { icon: 'dashboard', text: 'Summary', route: '/' },
        { icon: 'cloud_download', text: 'Installation', route: '/installation' },
        { icon: 'view_quilt', text: 'How to guide', route: '/how_to_guide' },
        { icon: 'visibility', text: 'Example page', route: '/good_looking_page'},
        { icon: 'thumbs_up_down', text: 'Conclusion', route: '/conclusion'},
        { icon: 'person', text: 'Team', route: '/team' },

      ]
    }
  }
}




</script>




