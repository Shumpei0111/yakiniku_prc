// function submitReserve(){
//   alert("予約を受付けますか？");
// }

new Vue({
  el: "#app",
  data: {
    v_phone_no: null,
    v_client_name: null,
    v_reserve_date: null,
    v_reserve_time: null,
    v_quantity_adult: 1,
    v_quantity_child: 0,
    v_seat_type: null,
    v_seat_smoke: null,
    v_others: ""
  },
  computed: {
    v_quantity_res: {
      get: function() {
        return this.v_quantity_adult + this.v_quantity_child
      },
    }
  },
  methods: {
    
  }
})
