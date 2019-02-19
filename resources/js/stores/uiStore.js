import { observable, action } from "mobx";

class UIStore {
  @observable title = "";
  @observable description = "";
  @observable modalOpen = false;
  @observable filter = "all";

  @action filterAll = () => {
    this.filter = "all"
  }

  @action filterComplete = () => {
    this.filter = "complete";
  }

  @action filterIncomplete = () => {
    this.filter = "incomplete";
  }

  @action clearFields = () => {
    this.title = "";
    this.description = "";
    this.toggleModal();
  }

  @action updateField = field => e => {
    this[field] = e.currentTarget.value;
  }

  @action toggleModal = () => {
    this.modalOpen = !this.modalOpen;
  }
}

export default new UIStore;