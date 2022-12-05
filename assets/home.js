$(document).ready(function () {
  const home = new Home();
  console.log('Hmoe initiated');
});

class Home {
  constructor() {
    this.initDataTable();
    this.flashMessage()
  }

  flashMessage() {
    setTimeout(() => {
      $('#flash_message').hide();
    }, 20000);
  }

  initDataTable() {
    $('#scrap_page_table').DataTable({
      searching: false,
      ordering: false,
      serverSide: true,
      lengthChange: false,
      columnDefs: [
        { width: "15%", targets: [1, 3, 4] },
        { width: "5%", targets: 0 },
        { width: "10%", targets: 5 },
        { width: "40%", targets: 2 },
        { className: "text-center", "targets": [0, 3, 4, 5] },
        { className: "align-middle", "targets": "_all" }
      ],
      ajax: {
        url: '/scrap_page/list',
        type: 'POST',
      }
    });
  }
}