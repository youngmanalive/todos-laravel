import React from 'react';
import { observer, inject } from "mobx-react";

@inject(['TodosStore'])
@observer
class Root extends React.Component {
  addTodo = () => {
    this.props.TodosStore.addTodo({
      title: "Another todo"
    });
  }

  render() {
    const { todos } = this.props.TodosStore;
    
    return (
      <div>
        <button onClick={this.addTodo}>Add Todo</button>
        <ul>
          {
            todos.map(({ title }, i) => (
              <li key={i}>{title}</li>
            ))
          }
        </ul>
        <a href="/">Home</a>
      </div>
    );
  }
}

export default Root;