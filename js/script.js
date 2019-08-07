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
    v_seat_smoke: null
  },
  computed: {
    v_quantity_res: {
      get: function() {
        return this.v_quantity_adult + this.v_quantity_child
      },
    }
  },
  methods: {
    checkForm: function(e) {
      if(this.v_phone_no && this.v_client_name) {
        return true;
      }

      if(!this.v_phone_no) {
        alert("電話番号を入力してください");
      }

      if(!this.v_client_name) {
        alert("お名前をカナで入力してください")
      }
    }
  }
})

//  && this.v_client_name && this.v_reserve_date && this.v_reserve_time && this.v_quantity_res && this.v_seat_type && this.v_seat_smoke