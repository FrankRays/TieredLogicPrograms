using System;
using System.Collections.Generic;
using System.Data;
using System.Data.SqlClient;
using System.Linq;
using System.Web;
using System.Web.Configuration;
using System.Web.UI;
using System.Web.UI.WebControls;

public partial class Home : System.Web.UI.Page
{
    protected void Page_Load(object sender, EventArgs e)
    {
    }
    protected void ddlCourse_SelectedIndexChanged(object sender, EventArgs e)
    {
        lblCourse.Text = ddlCourse.SelectedValue;
        lblResult.Text = "";
    }
    protected void ddlModule_SelectedIndexChanged(object sender, EventArgs e)
    {
        lblModule.Text = ddlModule.SelectedValue;
        lblResult.Text = "";
    }
    protected void ddlStudent_SelectedIndexChanged(object sender, EventArgs e)
    {
        lblCurrentStudent.Text = ddlStudent.SelectedValue;
        lblResult.Text = "";
    }
    protected void btnNextModule_Click(object sender, EventArgs e)
    {
        if (ddlModule.SelectedIndex < ddlModule.Items.Count - 1)
        {
            ddlModule.SelectedIndex += 1;
            ddlModule_SelectedIndexChanged(sender,e);
        }
    }
    protected void btnPreviousModule_Click(object sender, EventArgs e)
    {
        if (ddlModule.SelectedIndex > 0)
        {
            ddlModule.SelectedIndex -= 1;
            ddlModule_SelectedIndexChanged(sender,e);
        }
    }
    
    protected void btnSave_Click(object sender, EventArgs e)
    {
        if (ddlCourse.SelectedIndex <=0)
        {
            lblResult.Text = "Please select course!";
            return;
        }

        if (ddlModule.SelectedIndex <= 0)
        {
            lblResult.Text = "Please select module!";
            return;
        }

        if (ddlStudent.SelectedIndex <= 0)
        {
            lblResult.Text = "Please select student!";
            return;
        }

        string s = WebConfigurationManager.ConnectionStrings["DatabaseConnectionString"].ConnectionString;
        SqlConnection con = new SqlConnection(s);
        SqlCommand sqlComm = new SqlCommand();
        SqlDataReader reader;

        string querryStr = "INSERT INTO AssessmentResult " +
                           " ([StudentName],[CourseName],[ModuleName] " +
                           " ,[Question1],[Question2],[Question3],[Comments],[DateTimeUpd]) " +
                           " VALUES(@StudentName, @CourseName ,@ModuleName, " +
                           " @Question1, @Question2, @Question3, @Comments, @DateTimeUpd)";

        sqlComm.CommandText = querryStr;
        sqlComm.Parameters.AddWithValue("@StudentName", ddlStudent.SelectedValue);
        sqlComm.Parameters.AddWithValue("@CourseName", ddlCourse.SelectedValue);
        sqlComm.Parameters.AddWithValue("@ModuleName", ddlModule.SelectedValue);
        sqlComm.Parameters.AddWithValue("@Question1", radQuestionOne.SelectedValue);
        sqlComm.Parameters.AddWithValue("@Question2", radQuestionTwo.SelectedValue);
        sqlComm.Parameters.AddWithValue("@Question3", radQuestionThree.SelectedValue);
        sqlComm.Parameters.AddWithValue("@Comments", txtComments.Text);
        sqlComm.Parameters.AddWithValue("@DateTimeUpd", DateTime.Now);

        sqlComm.CommandType = CommandType.Text;
        sqlComm.Connection = con;

        con.Open();
        int result = sqlComm.ExecuteNonQuery();
        if (result == 1)
        {
            lblResult.Text = "Save sucessful!";

        }
        else
        {
            lblResult.Text = "Save error!";
        }
    }
}