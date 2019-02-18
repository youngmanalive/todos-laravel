import axios from 'axios';

class TodosAPI {
  fetchTodos = () => axios.get('/api/todos')
    .then(res => res.data);

  createTodo = todo => axios.post('/api/todos', todo)
    .then(res => res.data);

  updateTodo = todo => axios.patch(`/api/todos/${todo.id}`, todo)
    .then(res => res.data);

  deleteTodo = id => axios.delete(`/api/todos/${id}`)
    .then(res => res.data);
}

export default TodosAPI;