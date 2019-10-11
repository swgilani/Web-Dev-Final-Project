<template>

  <div class="team" style="font-family: 'Coda', cursive;">
   

    <v-container class="my-5">

      <v-layout row wrap>
        <v-flex xs12 sm6 md4 lg3 v-for="person in team" :key="person.name">
          <v-card flat class="text-xs-center ma-3">
            <v-responsive class="pt-4">
           <v-avatar size="100" class="grey lighten-2">
                <img :src="person.avatar">
              </v-avatar>
            </v-responsive>
            <v-card-text>
              <div class="subheading">{{ person.name }}</div>
              <div class="grey--text"><pre style="font-family: 'Coda', cursive;" >{{ person.role }}</pre></div>
            </v-card-text>
            <v-card-actions>
              <v-btn flat color="grey">
                <v-icon small left>message</v-icon>
                <span class="" style="font-size:11px;"><pre style="font-family: 'Coda', cursive;">{{ person.email }}</pre></span>
              </v-btn>
            </v-card-actions>
          </v-card>
        </v-flex>
      </v-layout>

    </v-container>
    
  </div>
 
</template>

<script>
export default {
  data() {
    return {
      team: [
        { name: 'Syed Wasiq Iqbal Gilani', role: `Front-End Developer\nBack-End Developer\nWebsite Formatting\nWebsite Host`, email: `swgilani@ryerson.ca\nID: 500774969`, avatar: '/wasiq.jpg' },
        
        { name: 'Mohammad Bundhoo', role: 'Research on Frameworks', email: 'mbundhoo@ryerson.ca\nID: 500812729', avatar: '/hud.jpg' },
        { name: 'Momin Chaudhry', role: 'Research on Frameworks', email: 'momin.chaudhry@ryerson.ca\nID: 500831162', avatar: '/momin.jpg' },
         { name: 'Danyal Chaudhry', role: 'Research on Frameworks', email: 'd1chaudhry@ryerson.ca\nID: 500833926', avatar: '/dan.jpg' },

     //   { name: 'Hud Bundhoo', role: 'lalala', email: 'mbundhoo@ryerson.ca', avatar: '/hud.jpg' },
       
      ]
    }
  }
}
</script>