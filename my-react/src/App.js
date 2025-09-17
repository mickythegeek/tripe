import logo from './logo.svg';
import SignIN from './Components/SignIN/SignIN';
import './App.css';
import SignUP from './Components/SignUp/SignUP';
import { BrowserRouter, Routes, Route } from "react-router-dom";





function App() {
  return (
    <div className="App">
      <header className="App-header">
        <BrowserRouter>
        <Routes>
          <Route path="/" element={<SignIN />} />
          <Route path="/SignUP" element={<SignUP />} />
        </Routes>
        </BrowserRouter>
        
      </header>
    </div>
  );
}

export default App;
