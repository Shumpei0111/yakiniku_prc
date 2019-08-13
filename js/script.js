// console.log(1, getToday());

window.addEventListener("load", getTomorrow);

function getTomorrow(){
  var today = new Date();
  today.setDate(today.getDate() + 1);
  var yyyy = today.getFullYear();
  var mm = ("0" + (today.getMonth() + 1)).slice(-2);
  var dd = ("0" + today.getDate()).slice(-2);
  return  document.getElementById("reserve_date").value = yyyy + "-" + mm + "-" + dd;
}

new Vue({
  el: "#app",
  data: {
    v_phone_no: null,
    v_client_name: null,
    v_reserve_date: getTomorrow(),
    v_reserve_time: null,
    v_quantity_adult: 1,
    v_quantity_child: 0,
    v_seat_type: null,
    v_seat_smoke: null,
    v_others: "特になし",
    inputResShow: true
  },
  computed: {
    v_quantity_res: {
      get: function() {
        return this.v_quantity_adult + this.v_quantity_child
      }
    },
    resBtnField: function() {
      if(this.inputResShow) {
        return "入力内容を非表示にする"
      }

      if(!this.inputResShow) {
        return "入力内容を表示する"
      }
    }
  },
  methods: {
    
  },
})