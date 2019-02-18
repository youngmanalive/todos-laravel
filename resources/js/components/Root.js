import React from 'react';
import { observer, inject } from "mobx-react";

@inject(['TodosStore'])
@observer
class Root extends React.Component {
  state = {
    title: "",
    description: ""
  }

  componentDidMount() {
    this.props.TodosStore.fetchTodos();
  }

  handleNew = e => {
    e.preventDefault();
    this.props.TodosStore.addTodo(this.state)
      .then(() => this.setState({ title: "", description: "" }));
  }

  handleDelete = id => {
    this.props.TodosStore.deleteTodo(id);
  }

  toggleTodo = todo => {
    this.props.TodosStore.updateTodo(todo);
  }

  updateField = field => e => {
    this.setState({ [field]: e.currentTarget.value });
  }

  render() {
    const { todoList } = this.props.TodosStore;
    
    return (
      <div>
        <a href="/">Home</a>
        <form onSubmit={this.handleNew}>
          <div><input type="text" onChange={this.updateField('title')} value={this.state.title}/></div>
          <div><input type="text" onChange={this.updateField('description')} value={this.state.description}/></div>
          <div><input type="submit" value="Add Todo"/></div>
        </form>
        <ul>
          {
            todoList.map(todo => (
              <li key={todo.id}>
                <div>
                  <h1>{todo.title}</h1>
                  <h4>Completed: {todo.completed ? 'true' : 'false'}</h4>
                  <p>{todo.description}</p>
                  <button onClick={() => this.handleDelete(todo.id)}>Delete</button>
                  <button onClick={() => this.toggleTodo(todo)}>Toggle</button>
                </div>
              </li>
            ))
          }
        </ul>
      </div>
    );
  }
}

export default Root;