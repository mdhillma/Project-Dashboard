var dashboardApp = new Vue({
  el: '#dashboard',
  data: {
    name : "Tapestry",
    "short_description": "Build a visualization layer for the project dashboard",
    "start_date" : "2018-07-01",
    "target_date" : "2018-11-03",
    "budget" : "4950000",
    "spent" : "3456700",
    "projected_spend": "4740500",
    "weekly_effort_target": 400,
    tasks: [

      {
        "id": 4,
        "title": "Completion % not saving",
        "type" : "Bug",
        "size" : "XS",
        "team" : "Luke's Parents",
        "status": "Open",
        "start_date": "2018-07-29",
        "close_date": "",
        "hours_worked": 27,
        "perc_complete": 80,
        "current_sprint" : false
      }

    ]
  },

  computed:{
    days_left: function() {
      //this.target.date
      return moment(this.target_date).diff(moment(), 'days')
    },
    pretty_target_date: function() {
      return this.pretty_date(this.target_date)
    }
  },
  methods:{
    pretty_date: function(d) {
      return  moment(d).format('l');
    },

    log(msg){
      alert(msg);
    },
    fetchTasks() {
      fetch('https://raw.githubusercontent.com/tag/iu-msis/dev/app/data/p1-tasks.json')
      .then(response => response.json())
      //means same thing as .then(function(response){return response.json()})
      .then( function(json){
        dashboardApp.tasks = json;
        console.log(json);
        consold.log(this.tasks);
      })

      .catch( function(err) {
        console.log('TASK FETCH ERROR');
        console.log(err)
      })
    },
    pretty_currency: function (val) {
      if (val <1e3) {return '$ '+val}

      if (val < 1e6) {
        return '$ '+ (val/1e3).toFixed(1) + 'k'
      }

      return '$ '+ (val/1e6).toFixed(1) + 'M'

    }
  },
  completeClass: function(){
    if (task.perc_complete ==100) {return 'alert-success'}
    if (task.current_sprint && task.hours_worked == 0) {return 'alert-warn'}
  },
gotoTask(tid){
  window.location = 'task.html?taskId=' + tid;
},

  created() {
    this.fetchTasks()
  },

  // fetchTasks (){
  //   fetch(...)
  //   .then( function successCallback (o){})
  //   .then()
  //   .catch( function(err) {
  //     console.log('TASK FETCH ERROR:');
  //     console.log(err);
  //   })
  // }
})
