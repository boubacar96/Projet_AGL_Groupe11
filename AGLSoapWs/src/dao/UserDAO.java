package dao;


import java.sql.*;
import java.util.ArrayList;

import domaine.User;
import metier.DBConnection;

public class UserDAO 
{
   
    private Connection connection;
    private PreparedStatement statement = null;
    private ResultSet result = null;



    String addQuery = "INSERT INTO user(nom, prenom, login, password, type_user) VALUES (?, ?, ?, ?, 1)";
    String allQuery = "SELECT * FROM user";
    String userLogin = "SELECT * FROM user WHERE login = ? and password = ?";
    String updateQuery = "update user set nom = ?, prenom = ?, login = ? where iduser = ?";
    String deleteQuery = "delete from user where iduser = ?";


    public void addUser(User user)
    {
        try
        {
            connection = DBConnection.getInstance();
            statement = connection.prepareStatement(addQuery);
            statement.setString(1, user.getNom());
            statement.setString(2, user.getPrenom());
            statement.setString(3, user.getLogin());
            statement.setString(4, user.getPassword());

            statement.executeUpdate();
        }
        catch (Exception e)
        {
            System.out.println("Erreur lors de l'ajout "+e.getMessage());
        }
    }

    public User userLogin(String login, String password)
    {
        User user = null;
        try
        {
            connection = DBConnection.getInstance();
            statement = connection.prepareStatement(userLogin);
            statement.setString(1, login);
            statement.setString(2, password);
            result = statement.executeQuery();

            if(result.next())
            {
                user = new User();
                user.setId(result.getInt("iduser"));
                user.setNom(result.getString("nom"));
                user.setPrenom(result.getString("prenom"));
                user.setLogin(result.getString("login"));
                user.setPassword(result.getString("password"));
                user.setTypeUser(result.getInt("type_user"));
                //user.setLogin(true);
            }


        }
        catch (Exception e)
        {
            System.out.println("login DAO error");
        }

        return user;
    }


    public void updateUser(User user)
    {
        try
        {
            connection = DBConnection.getInstance();
            statement = connection.prepareStatement(updateQuery);
            statement.setString(1, user.getNom());
            statement.setString(2, user.getPrenom());
            statement.setString(3, user.getLogin());
            statement.setInt(4, user.getId());

            statement.executeUpdate();
        }
        catch (Exception e)
        {
            System.out.println(e.getMessage());
        }
    }

    public void deleteUser(int iduser)
    {
        try
        {
            connection = DBConnection.getInstance();
            statement = connection.prepareStatement(deleteQuery);
            statement.setInt(1, iduser);
            statement.executeUpdate();
        }
        catch (Exception e)
        {
            System.out.println(e.getMessage());
        }
    }


    public ArrayList<User> getAllUser()
    {
        ArrayList<User> allUser = new ArrayList<User>();

        try
        {
            connection = DBConnection.getInstance();
            statement = connection.prepareStatement(allQuery);
            result = statement.executeQuery();

            while(result.next())
            {
                User user = new User();
                user.setNom(result.getString("nom"));
                user.setPrenom(result.getString("prenom"));
                user.setLogin(result.getString("login"));

                allUser.add(user);
            }
        }
        catch (Exception e)
        {
            System.out.println("Erreur serveur " + e.getMessage());
        }

        return allUser;
    }

}