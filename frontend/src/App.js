import { Routes, Route, BrowserRouter } from 'react-router-dom';
import Home from './pages/Home';
import RecipeDetails from './pages/RecipeDetails';
import UserProfile from './pages/UserProfile';
import Layout from './Layout';
import './App.css';

function App() {
  return (
    <BrowserRouter>
      <Routes>
        <Route path='/' element={<Layout />}>
          <Route index element={<Home />} />
          <Route path='recipedetails' element={<RecipeDetails />} />
          <Route path='userprofile' element={<UserProfile />} />
        </Route>
      </Routes>
    </BrowserRouter>

  );
}

export default App;
