using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.Web.UI;
using System.Web.UI.WebControls;
using System.Web.Configuration;
using System.Data.SqlClient;
using System.Data;

public partial class Register : System.Web.UI.Page
{
    protected void Page_Load(object sender, EventArgs e)
    {

    }
    protected void CreateUserButton_Click(object sender, EventArgs e)
    {
        if (checkEmail(Email.Text))
        {
            lblMessage.Text = "Email exists. Please choose another email";
            return;
        }
        string s = WebConfigurationManager.ConnectionStrings["DatabaseConnectionString"].ConnectionString;
        SqlConnection con = new SqlConnection(s);
        SqlCommand sqlComm = new SqlCommand();

        sqlComm.CommandText = String.Format("insert into Employees (Email, FirstName, LastName, Password, Commission, Status) values (@Email, @FirstName, @LastName, @Password, @Commission, @Status)");
        sqlComm.Parameters.AddWithValue("@FirstName", FirstName.Text);
        sqlComm.Parameters.AddWithValue("@LastName", LastName.Text);
        sqlComm.Parameters.AddWithValue("@Email", Email.Text);
        sqlComm.Parameters.AddWithValue("@Password", Password.Text);
        sqlComm.Parameters.AddWithValue("@Commission", 0);
        sqlComm.Parameters.AddWithValue("@Status", '1');
        sqlComm.CommandType = CommandType.Text;
        sqlComm.Connection = con;

        con.Open();
        sqlComm.ExecuteNonQuery();
        con.Close();

        Response.Redirect("./Home.aspx");
    }

    private Boolean checkEmail(String Email)
    {
        Boolean found = false;
        string s = WebConfigurationManager.ConnectionStrings["DatabaseConnectionString"].ConnectionString;
        SqlConnection con = new SqlConnection(s);
        SqlCommand sqlComm = new SqlCommand();
        SqlDataReader reader;

        sqlComm.CommandText = String.Format("select EmployeeID from Employees where Email=@Email");
        sqlComm.Parameters.AddWithValue("@Email", Email);
        sqlComm.CommandType = CommandType.Text;
        sqlComm.Connection = con;

        con.Open();
        reader = sqlComm.ExecuteReader();
        if (reader.Read())
        {
            found = true;
        }
        return found;
    }
}