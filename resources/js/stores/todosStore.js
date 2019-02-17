import { observable, action, autorun } from "mobx";

class TodosStore {
  @observable todos = [
    { title: "Do something" },
    { title: "Do something else" }
  ];

  @action.bound addTodo(obj) {
    this.todos.push(obj);
  }
}

export default new TodosStore;