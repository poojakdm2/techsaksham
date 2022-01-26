const searchFun = () =>{
  let filter= document.getElementById('datatable-search-input').value.toUpperCase();
  let myTable = document.getElementById('myTable');
  let tr = myTable.getElementsByTagName('tr');
  for(var i=0;i<tr.length;i++)
  {
    let td = tr[i].getElementsByTagName('td')[0];
  }
}