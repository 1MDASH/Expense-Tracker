function addExpenseGroup() {
  var container = document.getElementById("expenseInputs");
  var newGroup = document.createElement("div");
  newGroup.className = "expense-group";
  newGroup.innerHTML = '<input type="text" name="title[]" placeholder="Expense Title" required> <input type="number" name="amount[]" placeholder="Amount" required>';
  container.appendChild(newGroup);
}

var expenseForm = document.getElementById('expenseForm');
if (expenseForm) {
  expenseForm.addEventListener('submit', function(e) {
    e.preventDefault();
    var formData = new FormData(expenseForm);
    var xhr = new XMLHttpRequest();
    xhr.open('POST', '../backend/data_add.php', true);
    xhr.onload = function() {
      if (xhr.status === 200) {
        var data = JSON.parse(xhr.responseText);
        if (data.success) {
          alert('Expense added successfully!');
          expenseForm.reset();
        } else {
          alert('Error: ' + data.message);
        }
      } else {
        alert('An error occurred while adding expense.');
      }
    };
    xhr.send(formData);
  });
}
