<template>
  <v-container fluid grid-list-md>
      <img src="/food.jpg" alt="">
    <v-data-iterator
      :items="items"
      :rows-per-page-items="rowsPerPageItems"
      :pagination.sync="pagination"
      content-tag="v-layout"
      hide-actions
      row
      wrap
    >
      <v-toolbar
        slot="header"
        class="mb-2"
        color="orange"
        
        dark
        flat
      >
        <v-toolbar-title style="font-family: 'Coda', cursive;">NUTRITION CHART FOR OUR FAVORITE FOOD </v-toolbar-title>
      </v-toolbar>

      <v-flex
        slot="item"
        slot-scope="props"
        xs12
        sm6
        md4
        lg3
      >
        <v-card>
          <v-card-title class="subheading font-weight-bold" style="font-family: 'Coda', cursive;" >{{ props.item.name }}</v-card-title>

          <v-divider></v-divider>

          <v-list dense>
            <v-list-tile>
              <v-list-tile-content style="font-family: 'Coda', cursive;">Calories:</v-list-tile-content>
              <v-list-tile-content class="align-end" style="font-family: 'Coda', cursive;">{{ props.item.calories }}</v-list-tile-content>
            </v-list-tile>

            <v-list-tile>
              <v-list-tile-content style="font-family: 'Coda', cursive;">Fat:</v-list-tile-content>
              <v-list-tile-content class="align-end" style="font-family: 'Coda', cursive;">{{ props.item.fat }}</v-list-tile-content>
            </v-list-tile>

            <v-list-tile>
              <v-list-tile-content style="font-family: 'Coda', cursive;">Carbs:</v-list-tile-content>
              <v-list-tile-content class="align-end" style="font-family: 'Coda', cursive;">{{ props.item.carbs }}</v-list-tile-content>
            </v-list-tile>

            <v-list-tile>
              <v-list-tile-content style="font-family: 'Coda', cursive;">Protein:</v-list-tile-content>
              <v-list-tile-content class="align-end" style="font-family: 'Coda', cursive;">{{ props.item.protein }}</v-list-tile-content>
            </v-list-tile>

            <v-list-tile>
              <v-list-tile-content style="font-family: 'Coda', cursive;">Sodium:</v-list-tile-content>
              <v-list-tile-content class="align-end" style="font-family: 'Coda', cursive;">{{ props.item.sodium }}</v-list-tile-content>
            </v-list-tile>

            <v-list-tile>
              <v-list-tile-content style="font-family: 'Coda', cursive;">Calcium:</v-list-tile-content>
              <v-list-tile-content class="align-end" style="font-family: 'Coda', cursive;">{{ props.item.calcium }}</v-list-tile-content>
            </v-list-tile>

            <v-list-tile>
              <v-list-tile-content style="font-family: 'Coda', cursive;">Iron:</v-list-tile-content>
              <v-list-tile-content class="align-end" style="font-family: 'Coda', cursive;">{{ props.item.iron }}</v-list-tile-content>
            </v-list-tile>
          </v-list>
        </v-card>
      </v-flex>

      <v-toolbar
        slot="footer"
        class="mt-2"
        color="orange"
        dark
        dense
        flat
      >
        <v-toolbar-title></v-toolbar-title>
      </v-toolbar>
    </v-data-iterator>
    
  </v-container>
</template>

<script>
  export default {
    data: () => ({
      rowsPerPageItems: [4, 8, 12],
      pagination: {
        rowsPerPage: 4
      },
      items: [
        {
          value: false,
          name: 'Frozen Yogurt',
          calories: 159,
          fat: 6.0,
          carbs: 24,
          protein: 4.0,
          sodium: 87,
          calcium: '14%',
          iron: '1%'
        },
        {
          value: false,
          name: 'Ice cream sandwich',
          calories: 237,
          fat: 9.0,
          carbs: 37,
          protein: 4.3,
          sodium: 129,
          calcium: '8%',
          iron: '1%'
        },
        {
          value: false,
          name: 'Eclair',
          calories: 262,
          fat: 16.0,
          carbs: 23,
          protein: 6.0,
          sodium: 337,
          calcium: '6%',
          iron: '7%'
        },
        {
          value: false,
          name: 'Cupcake',
          calories: 305,
          fat: 3.7,
          carbs: 67,
          protein: 4.3,
          sodium: 413,
          calcium: '3%',
          iron: '8%'
        }
      ]
    })
  }
</script>