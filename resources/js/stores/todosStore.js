import { observable, action, computed } from "mobx";
import TodosAPI from "../api/todosAPI";

class TodosStore {
  @observable todos = {};
  todosAPI = new TodosAPI;

  @computed get allTodos() {
    return Object.values(this.todos);
  }

  @computed get completeTodos() {
    return Object.values(this.todos).filter(todo => todo.completed);
  }

  @computed get incompleteTodos() {
    return Object.values(this.todos).filter(todo => !todo.completed);
  }

  @action fetchTodos = () =>
    this.todosAPI.fetchTodos()
      .then(todos => todos.map(todo => this.todos[todo.id] = todo));

  @action addTodo = obj => 
    this.todosAPI.createTodo(obj)
      .then(todo => this.todos[todo.id] = todo);
  
  @action updateTodo = obj =>
    this.todosAPI.updateTodo(obj)
      .then(todo => this.todos[todo.id] = todo);

  @action deleteTodo = id =>
    this.todosAPI.deleteTodo(id)
      .then(() => delete this.todos[id]);
}

export default new TodosStore;